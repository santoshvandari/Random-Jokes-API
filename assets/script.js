document.getElementById("btn-fetch").addEventListener("click",FetchData);
function FetchData(){
    const url = "http://randomjokesapi.santosh0.com.np/JokesAPI/";
    fetch(url)
    .then(response=>response.json())
    .then(response=>{
        console.log(response);
        document.querySelector("#fetch-result").innerHTML=JSON.stringify(response);
    }).catch(e=>{
        console.log(e);
    })
}
FetchData();
let data =  123;
let string = data.toString();