function Search() {
    document.getElementById("see-more").classList.remove('de-active');
    var el = document.querySelectorAll('#see-more .see-more-service');
        el.forEach(function (value, index) {
            value.remove();
        });

    var search = document.querySelector('[name="search"]').value.trim();

        var xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../controller/searchStudents.php', true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send('search=' + search);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var res = this.responseText;

                if (res != '' && res != "not found" && res != "not ok") {
                    //document.getElementById("see-more").classList.add('active');
                    var results = JSON.parse(res);

                    if (results.length) {
                        results.forEach(function(value, index) {
                            var div = document.createElement('div');
                            div.setAttribute("class", "seeresult");
                            div.classList.add('cursor');
                            console.log('worked')
                            div.setAttribute("onclick", "browseUser(this)");
                            var innerDiv = document.createElement('div');
                            div.appendChild(innerDiv);
                            for (const [k, v] of Object.entries(value)) {
                                if (k != 'u_id') {
                                    if (k == 'sname') {
                                        var h1 = document.createElement('h1');
                                        var txt = document.createTextNode(v);
                                        h1.appendChild(txt);
                                        div.insertBefore(h1, innerDiv);
                                    } else if (k == 'details') {
                                        var p = document.createElement('p');
                                        var txt = document.createTextNode(v);
                                        p.appendChild(txt);
                                        div.appendChild(p);
                                    } else if ((k == 'name') || (k == 'catagory') || (k == 'price')) {
                                        var p = document.createElement('p');
                                        p.setAttribute("class", "sub-title");
                                        var txt = document.createTextNode(v);
                                        p.appendChild(txt);
                                        innerDiv.appendChild(p);
                                    }
                                }
                            }
                            div.setAttribute("data-uid", value.u_id);
                            document.querySelector('#see-more').appendChild(div);
                        });
                    }
                } else {
                    console.log('not ok');
                }
            }
        }
    }
}


function checkSearch() {
    if (document.querySelector('[name="search"]')) {
        var search = document.querySelector('[name="search"]').innerHTML;
        if (search == '') {
            document.getElementById("see-more").classList.add('de-active');
            var el = document.querySelectorAll('#see-more>div');
            el.forEach(function(value, index) {
                value.remove();
            });
        }
    }
}