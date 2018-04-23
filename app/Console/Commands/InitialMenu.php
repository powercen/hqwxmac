<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InitialMenu extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'menu:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '初始化菜单';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->initialMenu();
    }

    public function initialMenu()
    {
        $buttons = [
            [
                'type' => 'view',
                'name' => '培训首页',
                'url' => route('pages.training', 'home')
            ],
            [
                'type' => 'view',
                'name' => '华庆互动',
                'url' => route('pages.interaction')
            ],
            [
                'type' => 'view',
                'name' => '考勤成绩',
                'url' => route('pages.punchcard')
            ]
        ];

        app('wechat.official_account')->menu->create($buttons);
    }

}


