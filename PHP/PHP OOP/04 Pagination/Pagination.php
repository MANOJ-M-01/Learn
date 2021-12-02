<?php
class Pagination{

    private $pages;
    private $style;
    private $link;

    public function __construct($pages,$styles=null,$link=null){
        $this->pages=$pages;
        $this->styles=$styles;
        $this->link=$link;
    }

    public function Pages($curPage=null){

        /*
        *   pagination styles
        *
        */
        if(isset($this->styles['page-container'])){
            $pageboxStyle=$this->styles['page-container'];
        }else{
            $pageboxStyle="";
        }
        if(isset($this->styles['page-style'])){
            $pageStyle=$this->styles['page-style'];
        }else{
            $pageStyle="";
        }
        if(isset($this->styles['page-active'])){
            $pageStyleActive=$this->styles['page-active'];
        }else{
            $pageStyleActive="";
        }
        
        /*
        *   pagination starts
        *
        */
        $page=[]; 
        for($i=1;$i<=$this->pages;$i++) {
            if ($i==$curPage) { 
                $page[]='<a class="'.$pageStyle.' '.$pageStyleActive.'" title="Current Page" href="'.$this->link.'='.$i.'">'.$i.'</a>';
            } else {
                if ($this->pages==$i) {
                    if ($curPage==1) { 
                        $page[]='<a class="'.$pageStyle.'" title="More Page"  >....</a>';  
                    } 
                    $page[]='<a class="'.$pageStyle.'" title="Last Page"  href="'.$this->link.'='.$i.'">'.$i.'</a>';
                }
                if ($i==1) { 
                    $page[]='<a class="'.$pageStyle.'" title="First Page"  href="'.$this->link.'='.$i.'">'.$i.'</a>';
                    $morePageStart=$i+1;
                    if (($curPage-1)>$morePageStart) { 
                        $page[]='<a class="'.$pageStyle.'" title="More Page">...</a>';
                    }
                }
                if ($i==($curPage+1)) {
                    if (!($curPage==($this->pages-1))) { 
                        $page[]='<a class="'.$pageStyle.'" title="Got To This Page"  href="'.$this->link.'='.$i.'">'.$i.'</a>';
                        $morePageEnd=$curPage+2;
                        if (!($curPage==1)) {
                            if ($morePageEnd<$this->pages) { 
                                $page[]='<a class="'.$pageStyle.'" title="More Page">...</a>';
                            }
                        }
                    }
                }
                if ($i==($curPage-1)) {
                    if (!($curPage==2)) {
                        $page[]='<a class="'.$pageStyle.'" title="Got To This Page"  href="'.$this->link.'='.$i.'">'.$i.'</a>';    
                    }
                }
            }
        } 
        $allpages="";
        foreach($page as $pages){
            $allpages=$allpages.$pages;
        }
        $data='<div class="'.$pageboxStyle.'">'.$allpages.'</div>';
        return $data;
    }

}