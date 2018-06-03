function keywordSel(elem){
    var select = elem;
    if(select.options[select.selectedIndex].value != 'add_new') {
        addHiddenKeyword(select.options[select.selectedIndex].innerHTML, select.options[select.selectedIndex].value);
    } else {
        show_hide_add();
    }
}

function addHiddenKeyword(keyname, id){
    var label = document.getElementById('sel_labe');
    var hidden = document.getElementById('hidArr');
    if(hidden.value.indexOf("," + id + ",") == -1) {
        label.innerHTML += keyname + ' ';
        hidden.value += id + ',';
    }
    console.log(label.innerHTML);
    console.log(hidden.value);
}

function show_hide_add(){
    var keyadd = document.getElementById("keywordAdd");
    if (keyadd.style.display == 'flex') {
        keyadd.style.display = 'none';
    } else {
        keyadd.style.display = 'flex';
    }
}

function addbtn(){
    var keyName = document.getElementById('keyWordName').value;
    var keyDesc = document.getElementById('keyWordDesc').value;
    var request = new XMLHttpRequest();
    var params = 'keyword='+encodeURIComponent(keyName)+'&keywordDesc='+encodeURIComponent(keyDesc);
    request.onreadystatechange = function() {
        if(request.readyState === 4)
            if (request.status === 200)
                if (request.responseText != 'error') {
                    addHiddenKeyword(keyName, request.responseText);     
                }
    }
    request.open('POST', 'addkeyword.php');
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(params);
    document.getElementById("keyWordName").value = '';
    document.getElementById("keyWordDesc").value = '';
    show_hide_add();
}

function cancelbtn(){
    document.getElementById("keyWordName").value = '';
    document.getElementById("keyWordDesc").value = '';
    document.getElementById("keywords_sel").selectedIndex = 0;
    clearKeywords();
}

function clearKeywords(){
    var label = document.getElementById('sel_labe');
    var hidden = document.getElementById('hidArr');
    show_hide_add();
    hidden.value = ',';
    label.innerHTML = 'Ключевые слова: ';
}