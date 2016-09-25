<?php

class BaseController extends Controller {
    public $tpl_dir = '';
    public $minitpl = false;

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }
    protected function renderView($view) {
        if ($this->minitpl) {
            return preg_replace(array('/\<!--[^\[](.|\n)*?[^\]]--\>/', '/\/\*(.|\n)*?\*\//'), '', strval($view) );
        }
        return $view;
    }
    /**
     * 渲染页面
     * @param  string $tpl           视图文件，通常设为调用render的方法的名称
     * @param  array  $data          数据内容
     * @param  string $from_function 调用render的方法的名称，为空时使用$tpl值
     */
    public function render($tpl, $data=array(), $from_function=null) {
        $reflection                 = new \ReflectionClass($this);
        $data ['__NAMESPACE__']     = $reflection->getNamespaceName();
        $data ['__CLASS__']         = $reflection->getName();//get_class($this);
        $data ['__FUNCTION__']      = $from_function ? $from_function : $tpl;

        $view   = View::make($this->tpl_dir . $tpl, $data);
        return $this->renderView($view);
        /*if ($this->minitpl) {
            return preg_replace(array('/\<!--[^\[](.|\n)*?[^\]]--\>/', '/\/\*(.|\n)*?\*\//'), '', strval(View::make($this->tpl_dir . $tpl, $data)));
        }
        return View::make($this->tpl_dir . $tpl, $data);*/
    }
    public function layoutRender($tpl, $data=array(), $from_function=null) {
        $reflection                 = new \ReflectionClass($this);
        $this->layout->__NAMESPACE__= $reflection->getNamespaceName();
        $this->layout->__CLASS__    = $reflection->getName();//get_class($this);
        $from_function              = $from_function ? $from_function : $tpl;
        $this->layout->__FUNCTION__ = $from_function;
        $this->layout->content      = $this->render($tpl, $data, $from_function);

        $this->layout               = $this->renderView($this->layout);
    }
}
