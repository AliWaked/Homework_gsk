let hrefs = ['homework1.html','homework2.html'];
let link = document.getElementById('links');
for(let i =0;i< hrefs.length; i++) {
    if(i == active) {
        a = `<a href="${hrefs[i]}" class="active">Homework ${i+1}</a>`;
    }else{
        a = `<a href="${hrefs[i]}">Homework ${i+1}</a>`;
    }
    link.innerHTML += a;
}
