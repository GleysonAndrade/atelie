<link href="view/tema/css/contact.css" rel="stylesheet" id="bootstrap-css">
<script src="view/tema/js/bootstrap.min"></script>
<script src="view/tema/js/jquery-1.11.1.min"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!------ Include the above in your HEAD tag ---------->
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1 text-center">
                    Contato </h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form action="envio">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nome</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Digite seu nome" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Assunto</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Assunto:</option>
                                <option value="service">Pedidos</option>
                                <option value="suggestions">Sugestões</option>
                                <option value="product">Produtos</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Messagem</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Digite sua menssagem"></textarea><br/>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary pull-left btn-block" id="btnContactUs">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <div><span class="fa fa-globe"></span> Endereço</div>
            <address>
                <strong>Laura Laços Atelier, Inc.</strong><br>
                Rua Maceió, 341<br>
                Vista Alegre, Ibirite <br>
                <abbr title="Phone">
                    Telefone:</abbr>
                (31) 456-7890
            </address>
            <address>
                <strong> Email</strong><br>
                <a href="mailto:#">first.last@example.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
