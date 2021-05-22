var hiddenTags = [];
function addLinkToTable() {
    if (document.querySelector('.search_table')) {
        document.querySelector('.search_table').addEventListener('click', function (ev) {

            let $id = ev.target.closest('tr').querySelector('.search_table_id').innerText;
            let url = `fullinfo.php?id=${encodeURIComponent($id)}`;
            document.location.href = url;

        })
    }
}


window.onload = function () {
    addLinkToTable();


    // var obj_list = document.querySelector('.search'),
    // objs_list_li = obj_list.querySelectorAll('li');

    // // Перебираем все li в #list
    // for (var i = 0; i < objs_list_li.length; i++) {
    //     // Получаем список ul находящиеся в li
    //     var objs_li_ul = objs_list_li[i].querySelectorAll('ul');

    //     // Если li имеет ul, то применяем к заголовку стиль
    //     if (objs_li_ul.length) {
            
    //         objs_list_li[i].querySelector(".key").classList.add('drop-down');

    //         objs_list_li[i].addEventListener('click', function(ev){
    //             arrElements = ev.target.parentNode.getElementsByTagName('*');
               
    //                 for (let i = 1; i < arrElements.length; i++) {
    //                     if(!arrElements[i].classList.contains('hidden')){
                            
    //                         arrElements[i].classList.add('hidden');
    //                     }
    //                     else{
    //                         arrElements[i].classList.remove('hidden');
    //                 }
    //             }
                
                
    //                 // }
                    
                
    //         })
    //     };
    // };
   
    
}








