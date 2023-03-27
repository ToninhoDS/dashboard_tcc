<?php
include_once "comando_php/crud_php/conexao_cadastro.php";

$pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_NUMBER_INT);


if (!empty($pagina)) {

    //Calcular o inicio visualização
    $qnt_result_pg = 10; //Quantidade de registro por página
    $inicio = ($pagina * $qnt_result_pg) - $qnt_result_pg;

    $query_usuarios = "SELECT  cd_status_vagas, cd_numero_vaga, nm_nome, img_icon, dt_entrada, sg_placa, nm_status FROM tb_status_vagas ORDER BY cd_status_vagas DESC LIMIT $inicio, $qnt_result_pg";
    $result_usuarios = $conn->prepare($query_usuarios);
    $result_usuarios->execute();

    if (($result_usuarios) and ($result_usuarios->rowCount() != 0)) {

        $dados = "<div class='col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12'>
        <div class='card'>
            <h3 class='card-header'><strong>Status de Vagas</strong></h3>
            <div class='card-body p-0'>
                <div class='table-responsive'>
                    <table class='table'>
                        <thead class='bg-light'>
                            <tr class='border-0'>
                                <th class='border-0' >Nº Vagas</th>
                                <th class='border-0'>Imagem</th>
                                <th class='border-0'>Name</th>
                                <th class='border-0'>Placa</th>
                                <th class='border-0'>Entrada</th>
                                <th class='border-0'>Hrs Vagas</th>
                                <th class='border-0'>Status</th>
                                <th class='border-0 alter_vagas' ><p>Alterar Vaga</p></th>   
                            </tr>
                        </thead>
                        <tbody>";
                        while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
                            extract($row_usuario);
                            $Option_img = $row_usuario ['img_icon'];
                            if($row_usuario ['img_icon'] == 'carro'){
                                $img_icon ="img/carro_vagas.png";
                            }else{if($row_usuario ['img_icon'] == 'moto'){
                                $img_icon ="img/moto_vagas.png";
                            }else{if($row_usuario ['img_icon'] == 'bicicleta'){
                                $img_icon ="img/bike_vagas.jpg";
                            }else{if($row_usuario ['img_icon'] == 'patins'){
                                $img_icon ="img/patins_vagas.png";
                            }else{if($row_usuario ['img_icon'] == 'outros'){
                                $img_icon ="img/outros_vagas.png";
                            }else{if($row_usuario ['img_icon'] == 'livre'){
                                $img_icon ="img/disponivel_vagas.png";
                            }else{if($row_usuario ['img_icon'] == ''){
                                $img_icon ="img/disponivel_vagas.png";
                            }else{}
                        }}}}}}
                            
                            if($row_usuario ['nm_status'] == 'livre'){
                                $status = 'badge-success';
                                $img_icon = "img/disponivel_vagas.png";
                            }else{if($row_usuario ['nm_status'] == 'ocupado'){
                                $status = 'badge-danger';
                            }else{
                                $status = 'badge-brand';
                            }}
                            
                            $dados .= "
                            <tr>
                            <td id='valor_id$cd_status_vagas'>$cd_numero_vaga</td>
                            <td>

                            <select id='img_Option$cd_status_vagas' name='$Option_img' value='$Option_img' style='display:none' class='btn btn-warning dropdown-toggle'>
                               
                                <option name='$Option_img' value='$Option_img'selected>$Option_img</option>
                                <option name='carro' value='carro'>Carro</option>
                                <option name='moto' value='moto'>Moto</option>
                                <option name='bicicleta' value='bicicleta'>Bicicleta</option>
                                <option name='patins' value='patins'>Patins</option>
                                <option name='outros' value='outros'>Outros</option>
                                </select>
                            

                            <div id='img_status_vagas$cd_status_vagas' style='display:block' class='m-r-10'><img  id='valor_img$img_icon' src='$img_icon' alt='user' class='rounded' width='45'></div>
                            </td>
                           
                            <td id='valor_nome$cd_status_vagas'>$nm_nome</td>
                            <td id='valor_placa$cd_status_vagas'>$sg_placa</td>
                            <td id='valor_entrada$cd_status_vagas'>$dt_entrada</td>
                            <td id='valor_horas$cd_status_vagas'>0</td>
                            
                            <td>
                            <select id='Select_Option$cd_status_vagas' name='$nm_status' value='$nm_status' style='display:none' class='btn btn-warning dropdown-toggle'>
                                <option name='$nm_status' value='$nm_status'selected>$nm_status</option>
                                <option name='livre' value='livre'>Livre</option>
                                <option name='reserva' value='reserva'>Reserva</option>
                                <option name='ocupado' value='ocupado'>Ocupado</option>
                            </select>
                            <h3>
                            <div id='status_cores$cd_status_vagas' style='display:block'><span class='badge-dot $status mr-1' id='status'></span >$nm_status</h3></div></td>
                             
                                    <td class='d-flex botaov'>
                        
                        <button type='button' id='botao_editar$cd_status_vagas' class='btn btn-warning btn-sm me-1' onclick='editar_registro($cd_status_vagas)'>Editar</button>
                        
                        <button type='button' id='botao_salvar$cd_status_vagas' class='btn btn-warning btn-sm me-1'onclick='salvar_registro($cd_status_vagas)' style='display:none;font-size:12px;'>Salvar  </button>

                        <button type='button' id='cancelarRG_salvar$cd_status_vagas' class='btn btn-warning btn-sm me-1'onclick='cancelar_registro($cd_status_vagas)' style='display:none;font-size:12px;margin: 0 5px;'>Cancelar  </button>
                        
                       

                        <button style='margin: 0 5px; type='button' id='botao_visualizar$cd_status_vagas' value='$cd_status_vagas'name='id_visualizar$cd_status_vagas'class='btn btn-info btn-sm me-1'onclick='visualizar($cd_status_vagas)'>Informações</button>
                        
                        
                    </td>
                </tr>";
        }

        $dados .= "</tbody>
        </table>
    </div>";

        //Paginação - Somar a quantidade de usuários
        $query_pg = "SELECT COUNT(cd_status_vagas) AS num_result FROM tb_status_vagas";
        $result_pg = $conn->prepare($query_pg);
        $result_pg->execute();
        $row_pg = $result_pg->fetch(PDO::FETCH_ASSOC);

        //Quantidade de pagina
        $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

        $max_links = 2;

        $dados .= '<nav aria-label="Page navigation example"><ul class="pagination pagination-sm justify-content-center">';

        $dados .= "<li class='page-item'><a href='#' class='page-link' onclick='listarUsuarios(1)'>Primeira</a></li>";

        for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
            if ($pag_ant >= 1) {
                $dados .= "<li class='page-item'><a class='page-link' href='#' onclick='listarUsuarios($pag_ant)' >$pag_ant</a></li>";
            }
        }

        $dados .= "<li class='page-item active'><a class='page-link' href='#'>$pagina</a></li>";

        for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
            if ($pag_dep <= $quantidade_pg) {
                $dados .= "<li class='page-item'><a class='page-link' href='#' onclick='listarUsuarios($pag_dep)'>$pag_dep</a></li>";
            }
        }

        $dados .= "<li class='page-item'><a class='page-link' href='#' onclick='listarUsuarios($quantidade_pg)'>Última</a></li><li colspan='3'>
        <a href=''id='vagas-detalhes' class='page-link'>Detalhes</a>
    </li>";
        $dados .=   "</ul></nav>";

        $retorna = ['status' => true, 'dados' => $dados];
    } else {
        $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>
        Alera esta com ERRRO Usuario nao encontrado!
      </div>"];
    }
} else {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>
    Alera esta com ERRRO Usuario nao encontrado!
  </div>"];
}


echo json_encode($retorna);


