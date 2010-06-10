<?php
// auto-generated by sfViewConfigHandler
// date: 2010/06/08 20:04:09
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (!is_null($layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout')))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (is_null($this->getDecoratorTemplate()) && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('style.css', '', array ());
  $response->addStylesheet('style_.css', '', array ());
  $response->addStylesheet('style_ie.css', '', array ());
  $response->addStylesheet('style_ie6.css', '', array ());
  $response->addStylesheet('ui-lightness/jquery-ui-1.8.custom.css', '', array ());
  $response->addJavascript('jquery-1.4.2.min.js', '', array ());
  $response->addJavascript('jquery-ui-1.8.custom.min.js', '', array ());
  $response->addJavascript('datepicker.js', '', array ());


