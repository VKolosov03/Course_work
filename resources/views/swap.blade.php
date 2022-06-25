<script type="text/javascript">
                var array='{{$string}}'.split(';');
                array.pop();
                for(i=0; i<array.length; i++) {array[i]=array[i].split('#');}
                var elem1=document.getElementById('elem1');
                var elem2=document.getElementById('elem2');
                var elem3=document.getElementById('elem3');
                var left=document.getElementById('left_but');
                var right=document.getElementById('right_but');
                var i=0;
                var j=1;
                var k=array.length-1;
                init();
                function init(){
                    start_roll();
                    left.addEventListener('click', function() {
                        i++;
                        j++;
                        k++;
                        start_roll();
                    });
                    right.addEventListener('click', function() {
                        i--;
                        j--;
                        k--;
                        start_roll();
                    });
                }
                function check_numb(numb) {
                    if(numb==array.length) {numb=0;}
                    else if(numb==-1) {numb=array.length-1;}
                    return numb;
                }
                function start_roll() {
                    i=check_numb(i);
                    j=check_numb(j);
                    k=check_numb(k);
                    elem1.innerHTML='<a href="/'+array[i][0]+'"><img src="{{$request}}/./images/'+array[i][0]+'.png" alt="Landing" class="circle"></a><a href="/'+array[i][0]+'" class="caption"><p id="elem1" class="caption_text">'+array[i][1]+'</p></a>';
                    elem2.innerHTML='<a href="/'+array[j][0]+'"><img src="{{$request}}/./images/'+array[j][0]+'.png" alt="Landing" class="med_circle"></a>';
                    elem3.innerHTML='<a href="/'+array[k][0]+'"><img src="{{$request}}/./images/'+array[k][0]+'.png" alt="Landing" class="med_circle right_pic"></a>';
                }
</script>