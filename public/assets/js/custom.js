if(document.getElementById('list_pengajuan').length()){
    let bsu_kategori = document.getElementById('bsu_kategori');
    let bsu_fix = document.getElementById('bsu_fix');

    bsu_kategori.addEventListener("change", function(){
        if(bsu_kategori.value == 'fix'){
            bsu_fix.removeAttribute('readonly');
        }else{
            bsu_fix.value = "";
            bsu_fix.setAttribute('readonly', false);
        }
    });
    
    // bsu_fix.addEventListener("keypress", function(){
    //     bsu_fix.value = formatRupiah(bsu_fix.value);
    // });
    
}