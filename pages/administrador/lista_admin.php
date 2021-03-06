<div class="col-12 px-5">
	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
        <tbody>

		<?php
			$datos = Admin::obtener_lista_administadores($bd);
			$lista = "";

			foreach ($datos as $admin) {
                $des = "";
                $hab = "";

                if($admin["estatus"]==0){
                    $hab = "display:none";
                }
                else{
                    $des = "display:none";
                }

				$lista .= ' <tr id="'. $admin['id_admin'] .'">
                            <td>'. $admin["nombre"] .'</td>
                            <td>'. $admin["email"] .'</td>
                            <td>'. $admin["rol"] .'</td>
                            <td class="center text-center pull-center">
                                <btn class="btn btn-sm btn-success button_on" cod="'.  $admin['id_admin'] .'" title="Deshabilitar" style="'. $hab .'"><i class="fa fa-eye"></i></btn>
                                <btn class="btn btn-sm btn-danger button_off" cod="'.  $admin['id_admin'] .'" title="Habilitar" style="'. $des .'"><i class="fa fa-eye-slash"></i></btn>
                                <a class="btn btn-sm btn-info shared" href="agregar_administrador.php?id='.  $admin['hash'] .'" title="Editar"><i class="fa fa-edit"></i></a>
                        </tr>';

			}
			echo $lista;
		?>

        </tbody>
     </table>
    <!-- /.table-responsive -->
</div>