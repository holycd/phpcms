<html>
<body>
this is blade

@role('owner')
<p>This is visible to users with the given permissions. Gets translated to
    \Entrust::can('manage-admins'). The directive is already taken by core
    laravel authorization package, hence the directive instead.</p>
@endrole

</body>
</html>