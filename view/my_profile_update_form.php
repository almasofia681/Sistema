<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<form action="../index.php" method="POST" enctype="multipart/form-data" >
	<div class="panel-body"><!--panel-body -->
    	<div class="row">
            <div class="col-md-4" id="divPhoto"> 
                <img id="profile_pic1" alt="User Pic" src="" class="img-circle img-responsive">
                <input type="file" name="fileToUpload" id="fileToUpload" style="margin-top:7px;"  /> 
            </div>
            <div class=" col-md-8"> 
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr id="trFullName">
                            <td class="col-md-4" id="tdFullName1">Nombre Completo</td>
                            <td id="tdFullName2" ><input type="text" class="form-control" value="" name="full_name" id="full_name1" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <td id="tdIName1">Nombre con Iniciales</td>
                            <td id="tdIName2"><input type="text" class="form-control" value="" name="i_name" id="i_name1" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td id="tdAddress1">Dirección</td>
                            <td id="tdAddress2"><input type="text" class="form-control" value="" name="address" id="address1" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <td id="tdGender1">Genero</td>
                            <td id="tdGender2">
                                <select name="gender" class="form-control" id="gender2">
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td id="tdEmail1">Email</td>
                            <td id="tdEmail2"><input type="text" class="form-control" value="" name="email" id="email1" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <td id="tdPhone1">Número Telefonico</td>
                            <td id="tdPhone2"><input type="text" class="form-control" value="" name="phone" id="phone1" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <td>Nombre de Usuario</td>
                            <td id="user_name1"> </td>
                        </tr>
                        <tr>
                            <td id="tdPassword1">Contraseña</td>
                            <td id="tdPassword2"><input type="password" class="form-control" value="" name="password" id="password1" autocomplete="off"></td>
                        </tr>
                    </tbody>
                </table>
            </div>  
		</div>
         <p class="alert-info"><strong>Nota: Ocupamos la dirección de correo electrónico para el nombre de usuario.</strong></p>
	</div><!--panel-body -->  
    <div class="panel-footer text-right">
        <input type="hidden" id="id1" name="id" value="">
        <input type="hidden" name="do" value="update_admin_profile">
        <button type="submit" class="btn btn-warning " id="btnUpdate">Actualizar</button>
        <span class="pull-right" id="spanEdit"></span>
    </div>   
</form>                                      