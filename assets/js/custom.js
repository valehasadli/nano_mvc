/*
 * WILSA MVC JS
 * 
 * Author: Valeh
 */
$(document).ready(function () {
    $(document).on('click', '#help', function (e) {
        e.preventDefault();

        $.ajax ({
            url: $(this).attr('href'),
            dataType: 'json',
            data: {'1'},
            success: function (data) {

            }
        });

    });

   /* $.get('dashboard/readAll', function (o)
    {
        for (var i = 0; i < o.length; i++)
        {
            $('#readList').append(
                    '<tr>'
                    + '<td>' + o[i].id + '</td>' + '<td><a href="#" class="del" rel="' + o[i].id + '">X </a> ' + o[i].body + '</td>' +
                    '</tr>'
                    );
        }
        
        $('.del').click(function ()
        {

            
            delThis = $(this);

            var id = $(this).attr('rel');
                        
            
            $.post('dashboard/delete', {'id':id}, function (o){
                delThis.parent().remove();
            }, 'json');
            
            return false;
            
        });
        
    }, 'json');

    $('#adminInsert').submit(function ()
    {

        var url = $(this).attr('action');
        var data = $(this).serialize();

        $.post(url, data, function (o){

            $('#readList').append(
                    '<tr>'
                    + '<td>' + o[i].id + '</td>' + '<td><a href="#" class="del" rel="' + o[i].id + '">X </a> ' + o[i].body + '</td>' +
                    '</tr>'
                    );

        }, 'json');

        return false;

    });
*/

});
