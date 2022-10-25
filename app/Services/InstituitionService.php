<?php


namespace App\Services;


use Prettus\Validator\Contracts\ValidatorInterface;
use App\Repositories\InstituitionRepository;
use App\Validators\InstituitionValidator;

class InstituitionService{

    // vai gerenciar a insercao de dados do usuario na base de dados
    private $repository;
    private $validator;

    public function __construct(InstituitionRepository $repository, InstituitionValidator $validator){
            $this->repository = $repository;
            $this->validator = $validator;
    }

    public function store(array $data){

        try{

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);

            $instituition =  $this->repository->create($data);;

            return [
            'success' => true,
            'message' => "Usuario Cadastrado",
            'data' => $instituition,
            ];
        }catch(\Exception $e){
            return [
                'success' => false,
                'message' => "Erro de submissao!"
            ];
        }

    }

    public function update(){
        
    }

    public function destroy($user_id){
        
        try{

            $usuario = $this->repository->destroy($user_id);

            return [
            'success' => true,
            'message' => "Usuario Removido",
            'data' => null,
            ];
        }catch(\Exception $e){
            return [
                'success' => false,
                'message' => "Erro de remocao!"
            ];
        }

    }
}