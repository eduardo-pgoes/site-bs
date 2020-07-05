<div class="identidade-container">
    <div class="jumbotron">
        <h1 class="h1-media text-center" style="font-weight: bold;">NOSSAS CONQUISTAS</h1>
        <hr>
        
        <div class="row row-cols-2 row-cols-md-3">
            <div class="col">
                <x-flip-card src_imagem="{{URL::asset('assets/premios/croppedFinalist.png')}}">
                    <h3>Regional Finalist Award</h3>
                    <p>Prêmio concedido à aliança que chega à partida final da competição.</p>
                </x-flip-card>
            </div>
            <div class="col">
                <x-flip-card src_imagem="{{URL::asset('assets/premios/croppedRookie.png')}}">
                    <h3>Rookie All-Star Award</h3>
                    <p>Celebra a melhor equipe iniciante, que inspira os alunos a aprender mais sobre ciência e tecnologia e a desenvolver os valores da FIRST. </p>    

                </x-flip-card>
            </div>
            <div class="col">
                <x-flip-card src_imagem="{{URL::asset('assets/premios/croppedWoodie.png')}}">
                    <h3>Woodie Flowers Award</h3>
                    <p>Concedido ao melhor mentor da competição, aquele que melhor lidera, inspira e demonstra os valores da FIRST.</p>
                </x-flip-card>
            </div>
            <div class="col">
                <x-flip-card src_imagem="{{URL::asset('assets/premios/croppedGP.png')}}">
                    <h3>Gracious Professionalism Award</h3>
                    <p>Premia o profissionalismo gracioso da equipe que evidencia os valores da FIRST dentro e fora de quadra.</p>
                </x-flip-card>
            </div>
            <div class="col">
                <x-flip-card src_imagem="{{URL::asset('assets/premios/croppedHeart.png')}}">
                    <h3>Heart (não oficial)</h3>
                    <p>Conferido pelo time RUSH 27 a nossa equipe por termos superado as dificuldades e demonstrado respeito e união na competição.</p>
                </x-flip-card>
            </div>
            <div class="col">
                <x-flip-card src_imagem="{{URL::asset('assets/premios/croppedInspiracao.png')}}">
                    <h3>Inspiração Nacional</h3>
                    <p>Entregue à equipe que mais impactou sua comunidade e região por meio da STEM (Science, Technology, Engineering and Mathematics).</p>
                </x-flip-card>
            </div>
        </div>
    </div>
</div>