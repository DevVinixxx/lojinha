@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="py-5">
            <div class="row py-5">
                <div class="text-center">
                    <h3>Criar Produto</h3>
                </div>
                <form action="{{route('store')}}" class="col-md-9 m-auto" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="title">Nome</label>
                                        <input type="text" required="required" class="form-control mt-1" id="title" name="title">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Valor</label>
                                        <input type="number" required="required" class="form-control mt-1" id="amount" name="amount">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="category">Categoria</label>
                                        <select name="category" id="category" class="form-control">
                                            <option value="1">Camiseta</option>
                                            <option value="2">Camisa</option>
                                            <option value="3">Blusa</option>
                                            <option value="4">Calça</option>
                                            <option value="5">Short</option>
                                            <option value="6">Tênis</option>
                                            <option value="7">Acessórios</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="qtd">Quantidade</label>
                                        <input type="number" required="required" class="form-control mt-1" id="qtd" name="qtd">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="available">Disponível</option>
                                            <option value="unavailable">Indisponível</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="img">Imagem do produto</label>
                                        <input type="file" class="form-control mt-1" required  accept="image/*" id="img" name="img">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="size">Tamanho</label>
                            <input type="text" class="form-control" name="size" id="size">
                        </div>

                        <div class="col-md-8">
                            <label for="description">Descrição</label>
                            <textarea required="required" class="form-control mt-1" id="description" name="description" rows="6"></textarea>
                        </div>

                        
                        <div class="col-12 text-center mt-4">
                            <button type="submit" class="btn btn-success btn-lg px-3">Criar Produto</button>
                        </div>
                       
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
