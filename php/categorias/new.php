<style>
    .new {
        border: 2px solid white;
        width: 100%;
    }

    .title__new {
        font-family: sans-serif, 'lato';
        text-align: center;
        color: #fff;
    }

    marquee {
        color: #ffffff;
        font-size: 20px;
        padding: 5px
    }

    .new p {
        color: #fff;
    }

    .container_alert {
        margin-top: 50px
    }

</style>

<div class="container_alert">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="title__new">
                <h3>Notificaciones</h3>
            </div>

            <table class="new">
                <tr>
                    <td>

                        <marquee behavior="scroll" direction="" width="100%" HEIGHT=40 scrollamount="10" align="bottom">
                            <?php
                            $query="SELECT * FROM news WHERE fecha = (SELECT max(fecha) FROM news)";
                            $resultado = mysqli_query($conexion, $query);
                            $row = $resultado ->fetch_assoc();

                            echo $row['contenido'];

                            ?>
                        </marquee>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Publicado:
                            <?php
                            $query="SELECT * FROM news WHERE fecha = (SELECT max(fecha) FROM news) ";
                            $resultado = mysqli_query($conexion, $query);
                            $row = $resultado ->fetch_assoc();

                            echo $row['fecha'];

                            ?>
                        </p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
