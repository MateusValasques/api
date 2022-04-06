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
    });$('#excluir_artista').click(function() {
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
});


 //pega os dados do form
