        <footer class="Footer">
            &copy; 
            <?=$title?>
            <?=$address?>
            <?=$tel?>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script>
        var num = <?=$num?>;
        //console.log(num);
        $('nav ul li').eq(num-1).addClass('on');
    </script>
</body>
</html>