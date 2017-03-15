<?php

namespace Cars\CoreBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetLotteryCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('cars_core:get_lottery')
            ->setDescription('采集开奖信息')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            '采集数据中...',// A line
            '============',// Another line
        ]);

        $handle = $this->getContainer()->get('cars_core.service_getlottery');
        $handle->getNper();
        $output->writeln('执行成功！');
    }
}
