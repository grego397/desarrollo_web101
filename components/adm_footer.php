</div>
<div class="contenedor-pie">
        <div class="contenedor-2filas">
            <div class="pie">
                &copy; 2021 Blog Personal de Gregory, todos los derechos reservados.
            </div>
        </div>
    </div>
    <script>
        var btn_user = document.getElementById('btn_user');
        btn_user.addEventListener('click', function(){
            var user_menu = document.getElementById('user_menu');
            if(user_menu.style.visibility == "visible"){
                user_menu.style.visibility = "hidden";
            }else{
                user_menu.style.visibility = "visible";
            }
        });
    </script>
</body>

</html>