function mad3(){
    // настройки
        const options = {
            // родитель целевого элемента - область просмотра
            root: null,
            // без отступов
            rootMargin: '0px',
            // процент пересечения - половина изображения
            threshold: 1.0
        }
    
        // функция обратного вызова
        let callback = function(entries, observer){
            entries.forEach(entry => {
                // если элемент является наблюдаемым
                if (entry.isIntersecting) {
                    mad1(entry.target);				
                }
            })
    
        }
    
        // наблюдатель
        splitspan();
        
        let observer = new IntersectionObserver(callback, options);
        let spans = document.querySelectorAll('span');
        spans.forEach(target => {observer.observe(target)});
    } 
    
    window.addEventListener('scroll', function() {showScroll();});
    
    var clear = true;
    var oldOffset = pageYOffset;
    
    function showScroll() {
        if (clear) {
            clear = false;		
            mad3();
        }
    }
    
    function getRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++ ) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }
    function splitspan() {
        var art = document.getElementsByTagName('article');
        var txt = art[0].innerHTML;
        var newtxt = '';
        var find = / class="par"/gi;	
        var result=txt.replace(find,"");
        find = / class="fi"/gi;	
        var result=result.replace(find,"");
        find = /</gi;	
        var result=result.replace(find," <");
        find = />/gi;	
        var result=result.replace(find,"> ");
        console.log("result - "+result);
        var words = result.split(' ');
        for (var word of words) {
            if((word.indexOf('<') == -1)&&(word.indexOf('>') == -1)) { 
                // var chars = word.split('');
                // for (var ch of chars) {
                //     var newword = '<span>'+ch+'</span>';
                //     newtxt+=newword;	
                // }
                // newtxt+=' ';
                
                var newword = '<span>'+word+'</span> ';
                newtxt+=newword;
            } else {
                newtxt += word +' ';
            }	
        }
        console.log("newtxt - "+newtxt);
        art[0].innerHTML = newtxt;
    }
    function mad1(elem){
        elem.style.color = getRandomColor();
        var size = Math.floor(Math.random() * 50);		
        elem.style.fontSize = size+'px';
    }
    
    function mad() {
    
        var x = document.getElementsByTagName('span');
        for(var elem of x) {
            elem.style.color = getRandomColor();
            var size = Math.floor(Math.random() * 50);		
            elem.style.fontSize = size+'px';	
        }	
    }