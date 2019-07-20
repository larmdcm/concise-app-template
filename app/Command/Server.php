<?php

namespace App\Command;

use Concise\Console\Command\SwooleServer;
use App\Repository\TaskRepository;

class Server extends SwooleServer
{

   /**
     * 监听ws连接事件
     * @param $ws
     * @param $request
     */
    public function onOpen($ws, $request) 
    {
    }
    /**
     * 监听ws消息事件
     * @param $ws
     * @param $frame
     */
    public function onMessage($ws, $frame) 
    {
    }
    /**
     * close
     * @param $ws
     * @param $fd
     */
    public function onClose($ws, $fd) 
    {
    }
    /**
     * task任务进入
     * @param  object $server   
     * @param  integer $taskId   
     * @param  integer $workerId 
     * @param  array $data     
     * @return mixed      
     */
    public function onTask ($server, $taskId, $workerId, $data)
    {
    }
    /**
     * 任务处理完毕返回
     * @param  object $server 
     * @param  integer $taskId 
     * @param  array $data   
     * @return mixed         
     */
    public function onFinish ($server, $taskId, $data)
    {
    }
}