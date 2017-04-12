/* *************************** */
/* SECTION Suivi des équipages */
/* *************************** */
function loadSection_equipage () {
    console.log("REALTIME TEAM SYSTEM LOADED...")
    var list = $("#team_list")
    var table = $("#team_list .table")
    var loader = $(".team_loader")
    var content = ''
    
    function dataFormat (team, index, arr) {
        var position = index+1
        var html = '<tr '
        
        if(position <= 3) {
            html += 'class="success">' 
        } else {
            html += '>'
        }
        
        html += '<td>' + position + '</td>'
        html += '<td><img src="branche-master/public/uploads/partners/2017/' + team.team_logo + '" width="30" /> ' + team.team_name + '</td>'
        html += '<td>' + team.team_likes + ' <i class="fa fa-heart"></i></td>'
        html += '<td>#' + team.team_tag + '</td>'
        html += '</tr>'
        
        content += html
    }
    
    $.ajax({
        method: 'GET',
        url: '/branche-master/public/equipages/classement',
        beforeSend: function () {
            table.hide()
            loader.html("<p class='text-center'>Nous mettons à jour le classement...</p>")
        }
    })
    .done(function(data){
        console.log(data)
        loader.hide()
        if (data.length) {
            JSON.parse(data).forEach(dataFormat)
            table.append(content).fadeIn()
        } else {
            list.html("Aucun équipage inscrit pour l'instant...")
        }
    })
    .fail(function(jqXHR){
        console.log(jqXHR.responseText)
    })
    
}