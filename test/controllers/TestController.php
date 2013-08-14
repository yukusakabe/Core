<?php

class TestController
{
    public function run()
    {
        //echo $TPL_DIRS;
        
        $te = new CoreTe();
        $te->setDir(TPL_PATH);
        
        $params['str1'] = 'こんにちは';
        $params['str2'] = 'さようなら';
        
        $test = 'test';
        
        echo $te->combine($test, $params);
    }
}