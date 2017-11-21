<html>
@if(Auth::usuPermitido()->tienepermiso('permiso'))
    <div>Acceso como administrador</div>
@else
    <div>Acceso usuario</div>
@endif
</html>