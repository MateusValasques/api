<meta name="csrf-token" content="{{ csrf_token() }}" />
<p>Artistas<p>
<div>
<button type="button" id="cadastrar_artista">Cadastrar Artista</button>
<button type="button" id="alterar_artista">Alterar Artista</button>
<button type="button" id="excluir_artista">Excluir Artista</button>
</div>
<div>
<button type="button" id="cadastrar_artista_xml">Cadastrar Artista por XML</button>
<button type="button" id="alterar_artista_xml">Alterar Artista por XML</button>
<button type="button" id="excluir_artista_xml">Excluir Artista por XML</button>
</div>
<p>Gravadoras<p>
<div>
<button type="button" id="cadastrar_gravadora">Cadastrar Gravadora</button>
<button type="button" id="alterar_gravadora">Alterar Gravadora</button>
<button type="button" id="excluir_gravadora">Excluir Gravadora</button>
</div>
<div>
<button type="button" id="cadastrar_gravadora_xml">Cadastrar Gravadora por XML</button>
<button type="button" id="alterar_gravadora_xml">Alterar Gravadora por XML</button>
<button type="button" id="excluir_gravadora_xml">Excluir Gravadora por XML</button>
</div>
<p>Box de CD's (depende de gravadoras)<p>
<div>
<button type="button" id="cadastrar_box_cd">Cadastrar Box de CD's</button>
<button type="button" id="alterar_box_cd">Alterar Box de CD's</button>
<button type="button" id="excluir_box_cd">Excluir Box de CD's</button>
</div>
<div>
<button type="button" id="cadastrar_box_cd_xml">Cadastrar Box de CD's por XML</button>
<button type="button" id="alterar_box_cd_xml">Alterar Box de CD's por XML</button>
<button type="button" id="excluir_box_cd_xml">Excluir Box de CD's por XML</button>
</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{ asset('artista.js') }}"></script>
<script src="{{ asset('box_cd.js') }}"></script>
<script src="{{ asset('gravadora.js') }}"></script>