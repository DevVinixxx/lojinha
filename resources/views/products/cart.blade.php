@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Carrinho de compras</h2>
        <div class="row p-3">
            <div class="col-md-8">
                <div class="box">
                    <div class="box-body">
                        <table class="table">
                            <thead class="list-inline">
                                <th class="table-inline-item">teste</th>
                                <th class="table-inline-item">teste</th>
                                <th class="table-inline-item">teste</th>
                                <th class="table-inline-item">teste</th>
                            </thead>
        
                            <tbody>
                                <td class="table-inline-item">teste</td>
                                <td class="table-inline-item">teste</td>
                                <td class="table-inline-item">teste</td>
                                <td class="table-inline-item">teste</td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="h2">title</h1>
                        <p class="h3 py-2">R$ </p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Marca: </h6>
                            </li>
                        </ul>

                        <h6>Descrição:</h6>
                        <p>sadasdasdasda </p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Cor do produto: </h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>COR</strong></p>
                            </li>
                        </ul>

                        <h6>Caracteristicas:</h6>
                        <ul class="list-unstyled pb-3">
                            <li>hiaushdiuashd</li>
                        </ul>

                        <form action="" method="GET">
                            <input type="hidden" name="product-title" value="Activewear">
                            <div class="row">
                                <div class="col-auto">
                                    <ul class="list-inline pb-3">
                                        <li class="list-inline-item">Tamanhos:
                                            <input type="hidden" name="product-size" id="product-size" value="S">
                                        </li>
                                        <li class="list-inline-item"><span class="btn btn-success btn-size">P</span></li>
                                        <li class="list-inline-item"><span class="btn btn-success btn-size">M</span></li>
                                        <li class="list-inline-item"><span class="btn btn-success btn-size">G</span></li>
                                        <li class="list-inline-item"><span class="btn btn-success btn-size">GG</span></li>
                                    </ul>
                                </div>
                                <div class="col-auto">
                                    <ul class="list-inline pb-3">
                                        <li class="list-inline-item text-right">
                                            Quantidade
                                            <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                        </li>
                                        <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                        <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                        <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col d-grid">
                                    <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Comprar</button>
                                </div>
                                <div class="col d-grid">
                                    <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Adicionar ao carrinho</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection