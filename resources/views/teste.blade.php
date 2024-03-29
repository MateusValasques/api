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
<p>Distribuidoras <p>
<div>
<button type="button" id="cadastrar_distribuidora">Cadastrar Distribuidora</button>
<button type="button" id="alterar_distribuidora">Alterar Distribuidora</button>
<button type="button" id="excluir_distribuidora">Excluir Distribuidora</button>
</div>
<div>
<button type="button" id="cadastrar_distribuidora_xml">Cadastrar Distribuidora por XML</button>
<button type="button" id="alterar_distribuidora_xml">Alterar Distribuidora por XML</button>
<button type="button" id="excluir_distribuidora_xml">Excluir Distribuidora por XML</button>
</div>
<p>Genero Musical <p>
<div>
<button type="button" id="cadastrar_genero_musical">Cadastrar Genero Musical</button>
<button type="button" id="alterar_genero_musical">Alterar Genero Musical</button>
<button type="button" id="excluir_genero_musical">Excluir Genero Musical</button>
</div>
<div>
<button type="button" id="cadastrar_genero_musical_xml">Cadastrar Genero Musical por XML</button>
<button type="button" id="alterar_genero_musical_xml">Alterar Genero Musical por XML</button>
<button type="button" id="excluir_genero_musical_xml">Excluir Genero Musical por XML</button>
</div>
<p>Trilha <p>
<div>
<button type="button" id="cadastrar_trilha">Cadastrar Trilha</button>
<button type="button" id="alterar_trilha">Alterar Trilha</button>
<button type="button" id="excluir_trilha">Excluir Trilha</button>
</div>
<div>
<button type="button" id="cadastrar_trilha_xml">Cadastrar Trilha por XML</button>
<button type="button" id="alterar_trilha_xml">Alterar Trilha por XML</button>
<button type="button" id="excluir_trilha_xml">Excluir Trilha por XML</button>
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
<p>CD's (depende de gravadoras, generos e etc.)<p>
<div>
<button type="button" id="cadastrar_cd">Cadastrar CD</button>
<button type="button" id="alterar_cd">Alterar CD</button>
<button type="button" id="excluir_cd">Excluir CD</button>
</div>
<div>
<button type="button" id="cadastrar_cd_xml">Cadastrar CD por XML</button>
<button type="button" id="alterar_cd_xml">Alterar CD por XML</button>
<button type="button" id="excluir_cd_xml">Excluir CD por XML</button>
</div>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{ asset('artista.js') }}"></script>
<script src="{{ asset('box_cd.js') }}"></script>
<script src="{{ asset('gravadora.js') }}"></script>
<script src="{{ asset('cd.js') }}"></script>
<script src="{{ asset('distribuidora.js') }}"></script>
<script src="{{ asset('genero_musical.js') }}"></script>
<script src="{{ asset('trilha.js') }}"></script>