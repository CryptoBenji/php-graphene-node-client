<?php


namespace GrapheneNodeClient\Commands;


use GrapheneNodeClient\Connectors\ConnectorInterface;

class GetDiscussionsByBlogCommand extends CommandAbstract
{
    protected $method            = 'get_discussions_by_blog';
    protected $requiredParams = [
        0 => [
            'tag', //'author',
            'limit', //'limit'
//          'start_author', //'start_author' for pagination,
//          'start_permlink', //'start_permlink' for pagination,
        ]
    ];

    /**
     * @param array $params
     * @param string $answerFormat
     * @return mixed
     */
    public function execute($params = [], $answerFormat = ConnectorInterface::ANSWER_FORMAT_ARRAY)
    {
        $answer =  parent::execute($params, $answerFormat);

        return $answer['result'];
    }
}