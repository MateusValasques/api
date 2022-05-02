$(document).ready(function($) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $('#cadastrar_cd').click(function() {
        var cd = {
            id_cd: 1,
            titulo_cd: 'Teste',
            valor: 1,
            data_lanc: '2000-12-31',
            data_aqui: '2000-12-31',
            num_trilhas: 1,
            tempo_total: 1,
            varios_artistas: 'A',
            num_seq_box: 1,
            codigo_gene: 1,
            codigo_dist: 1,
            id_box: 1,
            codigo_grava: 1,
        }
        $.ajax({
            type: "post",
            url: "http://api.local/cd/store-json",
            data: JSON.stringify(cd),
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

    $('#cadastrar_cd_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/cd/store-xml",
            data: "<xml><id_cd>1</id_cd><titulo_cd>Nome Teste</titulo_cd><valor>1</valor><data_lanc>1</data_lanc><data_aqui>1</data_aqui><num_trilhas>1</num_trilhas><tempo_total>1</tempo_total><varios_artistas>1</varios_artistas><num_seq_box>1</num_seq_box><codigo_gene>1</codigo_gene><codigo_dist>1</codigo_dist><id_box>1</id_box><codigo_grava>1</codigo_grava></xml>",
            contentType: "text/xml",
            dataType: "xml",
            cache: false,
            error: function() {  },
            success: function(data) {
                alert("Cadastrado por XML com Sucesso");
            }
        });
    });
    $('#alterar_cd').click(function() {
        var cd = {
            id_cd: 1,
            titulo_cd: 'Teste',
            valor: 1,
            data_lanc: 1,
            data_aqui: 1,
            num_trilhas: 'Teste',
            tempo_total: 1,
            varios_artistas: 1,
            num_seq_box: 1,
            codigo_gene: 1,
            codigo_dist: 1,
            id_box: 1,
            codigo_grava: 1,
        }
        $.ajax({
            type: "post",
            url: "http://api.local/cd/update-json",
            data: JSON.stringify(cd),
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
    $('#alterar_cd_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/cd/update-xml",
            data: "<xml><id_cd>1</id_cd><titulo_cd>Nome Teste</titulo_cd><valor>1</valor><data_lanc>1</data_lanc><data_aqui>1</data_aqui><num_trilhas>1</num_trilhas><tempo_total>1</tempo_total><varios_artistas>1</varios_artistas><num_seq_box>1</num_seq_box><codigo_gene>1</codigo_gene><codigo_dist>1</codigo_dist><id_box>1</id_box><codigo_grava>1</codigo_grava></xml>",
            contentType: "text/xml",
            dataType: "xml",
            cache: false,
            error: function() {  },
            success: function(data) {
                alert("Alterado por XML com Sucesso");
            }
        });
    });
    $('#excluir_cd').click(function() {
        var cd = {
            id_cd: 1
        }
        $.ajax({
            type: "post",
            url: "http://api.local/cd/destroy-json",
            data: JSON.stringify(cd),
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
    $('#excluir_cd_xml').click(function() {
        
        $.ajax({ type: "POST",
            url: "http://api.local/cd/destroy-xml",
            data: "<xml><id_cd>1</id_cd><titulo_cd>Nome Teste</titulo_cd><valor>1</valor><data_lanc>1</data_lanc><data_aqui>1</data_aqui><num_trilhas>1</num_trilhas><tempo_total>1</tempo_total><varios_artistas>1</varios_artistas><num_seq_box>1</num_seq_box><codigo_gene>1</codigo_gene><codigo_dist>1</codigo_dist><id_box>1</id_box><codigo_grava>1</codigo_grava></xml>",
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
