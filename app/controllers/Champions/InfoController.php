<?php
/**
 * @author iorichina
 */
namespace Champions;
class InfoController extends ChampionsController {
    public $tpl_dir = 'champions.info.';
    public $minitpl = true;
    public $layout  = 'layout.home.index';
    /**
     * 英雄详细信息
     * @param  string $name 英雄名(info['id'])
     */
    public function getDetailOf($name = null) {
        if (!$name || 'undefined'==trim($name)) {
            return;
        }
        $data['name']   = ucfirst( trim($name) );
        $data['info']   = Api::info($data['name']);
        $this->layout->title    = $data['info']['name'] . ' <' . $data['info']['title'] . '>';

        return $this->layoutRender(__FUNCTION__, $data);
    }
}
