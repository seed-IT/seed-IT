
@extends('layouts/templateAll')
@section('contenu')
                <link href="{{ url('css/prime.css')}}" rel="stylesheet" type="text/css" media="all">

@endsection

@section('content')
<div id="table">
                                <table>
                                  <tr id="titre">
                                    <th>Abonnement</th>
                                    <th class="description">Description</th>
                                    <th>Prix</th>
                                    <th></th>
                                  </tr>
                                  <tr>
                                    <td>Free</td>
                                    <td class="description">
                                                        <ul>
                                                                        <li>3 échanges par mois</li>
                                                        </ul>
                                                </td>
                                    <td class="prix">Free</td>
                                                <td> <input type="button" value="Rester pauvre"></td>
                                  </tr>
                                  </tr>
                                  <tr>
                                    <td>Tulipe</td>
                                    <td class="description">
                                                        <ul>
                                                                        <li>10 échanges par mois</li>
                                                        </ul>
                                                </td>
                                    <td class="prix">2€/mois</td>
                                                <td> <input type="button" value="Acheter"></td>
                                  </tr>
                                  <tr>
                                    <td>Rose</td>
                                    <td class="description">
                                        <ul>
                                                <li>Accès illimité échanges par mois</li>
                                            <li>Raspberry pi et accès au conseils</li>
                                        </ul>
                                   </td>
                                    <td class="prix">
                                                                <ul>
                                                                        <li>70€</li>
                                                                        <li>2€/mois</li>
                                                                </ul>
                                                </td>
                                                <td> <input type="button" value="Acheter"></td>
                                  </tr>
                                </table>
@endsection