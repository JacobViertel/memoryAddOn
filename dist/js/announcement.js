Statamic.booted(() => {
    fetch(cp_url('announcement'))
    .then((resp) => resp.json()) //Transform the data into json
    .then(function(data){

        let workspaceID = document.getElementById('statamic');
        let announcement = document.createElement('div');
        announcement.setAttribute("id", "announcement");
        let newContent = document.createTextNode(data['msg']);
        announcement.appendChild(newContent);
        workspaceID.appendChild(announcement);

        if(data.level == 1){
            announcement.setAttribute("class", "announcement–info");
        }
        else if(data.level == 2){
            announcement.setAttribute("class", "announcement–warning");
        }
        else{
            announcement.setAttribute("class", "announcement–danger");
        }
        
        if(!data.visible){
            announcement.setAttribute("style", "display: none");
        }
        else if(data.visible == 0){
            announcement.setAttribute("style", "display: block");
        }
    })
    .catch(function(error){
        console.log(error);
    })
});
