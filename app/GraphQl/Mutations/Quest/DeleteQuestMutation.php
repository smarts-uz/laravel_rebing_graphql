<?php

namespace App\GraphQl\Mutations\Quest;

use App\Models\Category;
use App\Models\Quest;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
class DeleteQuestMutation extends Mutation
{

    protected $attributes = [
        'name' => 'deleteQuest',
        'description' => 'Deletes a quest'
    ];

    public function type(): Type
    {
        return Type::boolean();
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::nonNull(Type::int()),
                'rules' => ['exists:quests']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $category = Quest::findOrFail($args['id']);

        return  $category->delete() ? true : false;
    }
}
