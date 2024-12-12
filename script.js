        // ハンバーガーメニュー外をクリックしたときにメニューを閉じる
        window.addEventListener('click', function(e) {
            var humMenu = document.getElementById('humMenu');
            var humCheck = document.getElementById('humCheck');
            // メニュー以外をクリックした場合にメニューを閉じる
            if (!humMenu.contains(e.target)) {
                humCheck.checked = false;
            }
        });   

        function goback(){
            history.back();
        }

    