            
            function ajax(){
                let name = document.getElementById('name').value;

                let json = {'name': name, 'email': 'alamina@aiub.edu', 'password': '123'};
                let data = JSON.stringify(json);
                
                let xhttp = new XMLHttpRequest();
                xhttp.open('post', 'abc.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send('mydata='+data);
                xhttp.onreadystatechange = function (){
                    if(this.readyState == 4 && this.status ==200){
                        //alert(this.responseText);
                        let user = JSON.parse(this.responseText);
                        document.getElementById('head').innerHTML = user.name;
                    }
                }
            }