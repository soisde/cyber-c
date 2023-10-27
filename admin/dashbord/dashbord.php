<?php 

require_once('class/dashbord.php');


 $qtdDashbord = new DashbordClass();

 $qtdMetodo = $qtdDashbord->qtdMetodo();
 $qtdSolucoes = $qtdDashbord->qtdSolucoes();
 $qtdEntrega = $qtdDashbord->qtdEntrega();
 $qtdOrcamento = $qtdDashbord->qtdOrcamento();
 $qtdFaq = $qtdDashbord->qtdFaq();
 $qtdUsuario = $qtdDashbord->qtdUsuario();

?>

<style>
 
.dashboard {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}
 
.dashboard-card {
    flex: 1;
    min-width: 0;
   
}
 
.card-body{
    text-align: center;
    background: #222;
    color: #fff;
}
 
.card-body h6{
    font-size: 4em;
   font-weight: bold;
}
 
a{
    text-decoration: none;
    color: #fff;
}
 
</style>


<div class="container-fluid">
    <div class="dashboard">
        <div class="dashboard-card">
            <div class="card">
                <div class="card-body">
                    <a href="index.php?p=metodo"><h5 class="card-title">metodo</h5>
                    <h6><?php echo $qtdMetodo['idMetodo']; ?></h6></a>
                </div>
            </div>
        </div>
        <div class="dashboard-card">
            <div class="card">
                <div class="card-body">
                    <a href="index.php?p=solucoes"><h5 class="card-title">solucoes</h5>
                    <h6><?php echo $qtdSolucoes['idSolucoes']; ?></h6></a>
                </div>
            </div>
        </div>
        <div class="dashboard-card">
            <div class="card">
                <div class="card-body">
                    <a href="index.php?p=entrega"><h5 class="card-title">entrega</h5>
                    <h6><?php echo $qtdEntrega['idEntrega']; ?></h6></a>
                </div>
            </div>
        </div>
        <div class="dashboard-card">
            <div class="card">
                <div class="card-body">
                    <a href="index.php?p=orcamento"><h5 class="card-title">orcamento</h5>
                    <h6><?php echo $qtdOrcamento['idOrcamento']; ?></h6></a>
                </div>
            </div>
        </div>
        <div class="dashboard-card">
            <div class="card">
                <div class="card-body">
                    <a href="index.php?p=faq"><h5 class="card-title">faq</h5>
                    <h6><?php echo $qtdFaq['idFaq']; ?></h6></a>
                </div>
            </div>
        </div>
        <div class="dashboard-card">
            <div class="card">
                <div class="card-body">
                    <a href="index.php?p=usuario"><h5 class="card-title">usuario</h5>
                    <h6><?php echo $qtdUsuario['idUsuario']; ?></h6></a>
                </div>
            </div>
        </div>
    </div>
</div>


























