<?php
namespace Plumrocket\SocialLoginFree\Controller\Account\DoUse;

/**
 * Interceptor class for @see \Plumrocket\SocialLoginFree\Controller\Account\DoUse
 */
class Interceptor extends \Plumrocket\SocialLoginFree\Controller\Account\DoUse implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($context);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
