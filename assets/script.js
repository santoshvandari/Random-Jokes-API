document.getElementById("btn-fetch").addEventListener("click",FetchData);
function FetchData(){
    const url = "/JokesAPI/index.php";
    fetch(url)
    .then(response=>response.json())
    .then(response=>{
        document.querySelector("#fetch-result").innerHTML=JSON.stringify(response);
    }).catch(e=>{
        console.log(e);
    })
}
FetchData();
let data =  123;
let string = data.toString();