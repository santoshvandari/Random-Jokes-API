document.getElementById("btn-fetch").addEventListener("click",FetchData);
function FetchData(){
    const url = "JokesAPI/";
    fetch(url)
    .then(response=>response.json())
    .then(response=>{
        console.log(response)
        document.querySelector("#fetch-result").innerHTML=JSON.stringify(response);
    }).catch(e=>{
        console.log(e);
    })
}
FetchData();