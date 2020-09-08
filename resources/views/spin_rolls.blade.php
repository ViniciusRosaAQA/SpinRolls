@extends('layouts.app')

@section('content')
    <section id="aplicativo">

        <div class="center-page">
            <button id="rodar" class="col btn-danger p-2 btn" @click="pegarNumero">Girar</button>
            <br>
            <div id="progress" class="lds-dual-ring"></div>
            <div id="final">
              <label :class="[numSorteado == 1 ? 'congrats' : 'loss']"> @{{ message }}</label> <br>
              <label> @{{ sorteado }}</label><br>
              <a href=".">Tentar novamente</a>
            </div>
        </div>

    </section>

    <script type="text/javascript">
        var script = new Vue({
            el: "#aplicativo",
            data: {
                numSorteado: null,
                message: null,
                sorteado: null
            },
            methods: {
                pegarNumero: function (event) {
                    this.$http.get('/enviarnumero').then(response => {
                        this.numSorteado = response.data.numSorteado;

                        if (this.numSorteado == 1) {
                            this.message = "Parabéns! Você foi um dos sortudos a ganhar esta conqsuita.";
                        } else {
                            this.message = "Que pena! Você perdeu, mas não desista. Tente novamente.";
                        }

                        this.sorteado = "Seu número sorteado foi: " + this.numSorteado;
                    })
                }
            }
        });
    </script>

    <script type="text/javascript">

        $('#progress').hide();
        $('#final').hide();

        $('#rodar').click(function () {
            $('#rodar').remove();
            $('#progress').show();
           setTimeout(resultadofinal, 2000);
        })

        function resultadofinal () {
            $('#progress').hide();
            $('#final').show();
        }

    </script>

@endsection