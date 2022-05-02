$(document).ready(function($) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $('#cadastrar_trilha').click(function() {
        var trilha = {
            
            id: 1,
            id_cd: 1,
            duracao: 1,
            titulo_trilha: 1,
            comentario: 1,
        }
        $.ajax({
            type: "post",
            url: "http://api.local/trilha/store-json",
            data: JSON.stringify(trilha),
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

    $('#cadastrar_trilha_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/trilha/store-xml",
            data: "<xml><id>1</id><id_cd>1</id_cd><duracao>1</duracao><titulo_trilha>1</titulo_trilha><comentario>1</comentario></xml>",
            contentType: "text/xml",
            dataType: "xml",
            cache: false,
            error: function() {  },
            success: function(data) {
                alert("Cadastrado por XML com Sucesso");
            }
        });
    });
    $('#alterar_trilha').click(function() {
        var trilha = {
            
            id: 1,
            id_cd: 1,
            duracao: 2,
            titulo_trilha: 1,
            comentario: 1,
        }
        $.ajax({
            type: "post",
            url: "http://api.local/trilha/update-json",
            data: JSON.stringify(trilha),
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
    $('#alterar_trilha_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/trilha/update-xml",
            data: "<xml><id>1</id><id_cd>1</id_cd><duracao>2</duracao><titulo_trilha>1</titulo_trilha><comentario>1</comentario></xml>",
            contentType: "text/xml",
            dataType: "xml",
            cache: false,
            error: function() {  },
            success: function(data) {
                alert("Alterado por XML com Sucesso");
            }
        });
    });
    $('#excluir_trilha').click(function() {
        var trilha = {
            
            id: 1,
            id_cd: 1,
            duracao: 1,
            titulo_trilha: 1,
            comentario: 1,
        }
        $.ajax({
            type: "post",
            url: "http://api.local/trilha/destroy-json",
            data: JSON.stringify(trilha),
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
    $('#excluir_trilha_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/trilha/destroy-xml",
            data: "<xml><id>1</id><id_cd>1</id_cd><duracao>1</duracao><titulo_trilha>1</titulo_trilha><comentario>1</comentario></xml>",
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
