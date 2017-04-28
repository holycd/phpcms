<?php
namespace App\Models;

use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Translation\Exception\InvalidResourceException;

class BaseModel
{
    protected  $table;

    /**
     * 通过id 获取一条记录
     * @param $id
     * @param string $field
     * @return mixed
     */
    public function get($id, $field = '*') {
        return DB::table($this->getTable())->select($field)->where('id', $id)->first();
    }

    /**
     * 通过条件获取一条记录， 只返回第一条
     * @param array $condition 条件数据
     * @param string $field 返回字段
     * @return mixed 对象或空数组
     */
    public function findOneBy($condition, $field = '*') {
        $query = DB::table($this->getTable())->select($field);
        foreach ($condition as $key => $val) {
            $query = $query->where($key, $val);
        }
        return $query->first();
    }

    /**
     * 通过条件返回所有记录
     *
     * @param array $condition 条件数据
     * @param string $field 返回字段
     * @return mixed 对象或空数组
     */
    public function findBy($condition, $field = '*', $start = null, $limit = null) {
        $query = DB::table($this->getTable())->select($field);
        foreach ($condition as $key => $val) {
            $query->where($key, $val);
        }
        if ($start && $limit)
            $query->skip($start);
        if ($limit)
            $query->take($limit);

        return $query->get();
    }

    /**
     * 插入数据
     * @param $data
     * @return mixed
     */
    public function insert($data) {
        return DB::table($this->getTable())->insert($data);
    }

    /**
     * 更新数据
     *
     * @param array $condition 更新条件
     * @param array $data 更新数据
     * @return int 更新条数
     */
    public function update($condition, $data) {
        $query =  DB::table($this->getTable());
        foreach ($condition as $key => $val) {
            $query->where($key, $val);
        }

        return $query->update($data);
    }

    /**
     * 删除数据
     *
     * @param $condition
     * @return mixed
     */
    public function delete($condition) {
        $query =  DB::table($this->getTable());
        foreach ($condition as $key => $val) {
            $query->where($key, $val);
        }
        return $query->delete();
    }

    public function getTable() {
        if ($this->table)
            return $this->table;
        throw new InvalidResourceException('数据库表名未设置');
    }
    public function setTable($table) {
        $this->table = $table;
    }
}