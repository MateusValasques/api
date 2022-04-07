$(document).ready(function($) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $('#cadastrar_artista').click(function() {
        var artista = {
            id: 1,
            nome_artista: 'Teste',
            data_nasc: 2000-02-20,
            genero: 'M',
            peso: 'Teste',
            altura: 'Teste',
            ulr_foto: 'Teste',
            detalhes_artista: 'Teste'
        }
        $.ajax({
            type: "post",
            url: "http://api.local/artista/store-json",
            data: JSON.stringify(artista),
            contentType: "application/json; charset=utf-8",
            processData: false,
            contentType: false,
            beforeSend: function() {
               
            },
            complete: function() {
                
            },
            success: function(data) { 
                
                alert("Cadastrado com Sucesso"); 
            },
        });
    });

    $('#cadastrar_artista_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/artista/store-xml",
            data: "<xml><id>1</id><nome_artista>Nome Teste</nome_artista><data_nasc>2000-02-20</data_nasc><genero>M</genero><peso>M</peso><altura>M</altura><ulr_foto>M</ulr_foto><detalhes_artista>M</detalhes_artista></xml>",
            contentType: "text/xml",
            dataType: "xml",
            cache: false,
            error: function() {  },
            success: function(data) {
                alert("Cadastrado por XML com Sucesso");
            }
        });
    });
    $('#alterar_artista').click(function() {
        var artista = {
            id: 1,
            nome_artista: 'Teste Alteração',
            data_nasc: 2000-02-20,
            genero: 'M',
            peso: 'Teste',
            altura: 'Teste',
            ulr_foto: 'Teste',
            detalhes_artista: 'Teste'
        }
        $.ajax({
            type: "post",
            url: "http://api.local/artista/update-json",
            data: JSON.stringify(artista),
            contentType: "application/json; charset=utf-8",
            processData: false,
            contentType: false,
            beforeSend: function() {
               
            },
            complete: function() {
                
            },
            success: function(data) { 
                
                alert("Alterado com Sucesso"); 
            },
        });
    });
    $('#alterar_artista_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/artista/update-xml",
            data: "<xml><id>1</id><nome_artista>Nome Alterado</nome_artista><data_nasc>2000-02-20</data_nasc><genero>M</genero><peso>M</peso><altura>M</altura><ulr_foto>M</ulr_foto><detalhes_artista>M</detalhes_artista></xml>",
            contentType: "text/xml",
            dataType: "xml",
            cache: false,
            error: function() {  },
            success: function(data) {
                alert("Alterado por XML com Sucesso");
            }
        });
    });
    $('#excluir_artista').click(function() {
        var artista = {
            id: 1,
        }
        $.ajax({
            type: "post",
            url: "http://api.local/artista/destroy-json",
            data: JSON.stringify(artista),
            contentType: "application/json; charset=utf-8",
            processData: false,
            contentType: false,
            beforeSend: function() {
               
            },
            complete: function() {
                
            },
            success: function(data) { 
                
                alert("Excluido com Sucesso"); 
            },
        });
    });
    $('#excluir_artista_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/artista/destroy-xml",
            data: "<xml><id>1</id><nome_artista>Nome Teste</nome_artista><data_nasc>2000-02-20</data_nasc><genero>M</genero><peso>M</peso><altura>M</altura><ulr_foto>M</ulr_foto><detalhes_artista>M</detalhes_artista></xml>",
            contentType: "text/xml",
            dataType: "xml",
            processData: false,
            contentType: false,
            success: function(data) {
                alert("Excluido por XML com Sucesso");
            }
        });
    });
});


 //pega os dados do form
