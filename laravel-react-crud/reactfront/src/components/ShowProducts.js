import React, { useEffect, useState } from 'react'
import axios from 'axios';

import { Link } from 'react-router-dom'

const ShowProducts = () => {
    const endpoint = 'http://localhost:8000/api';
    const [products, setProducts] = useState([]);

    useEffect(() => {
        getAllProducts();
    }, [])

    const getAllProducts = async () => {
        const response = await axios.get(`${endpoint}/products`);
        setProducts(response.data);
        console.log(response);
    }
    const deleteProduct = async (id) => {
        await axios.delete(`${endpoint}/product/${id}`)
    }

    return (
        <div>
            <div className='d-grid gap-2'>
                <Link to='/create' className='btn btn-success btn-lg mt-2 mb-2 text-white'>Create</Link>

                <table className='table table-striped'>
                    <thead className='bg-primary text-white'>
                        <tr>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {
                            products.map((product) => (
                                <tr key={product.id}>
                                    <td>{product.description}</td>
                                    <td>
                                        {product.price}
                                    </td>
                                    <td>
                                        {product.stock}
                                    </td>
                                    <td>
                                        <Link to={`/edit/${product.id}`} className='btn btn-warning'>Edit</Link>
                                        <button onClick={() => deleteProduct(product.id)} className='btn btn-danger'>Delete</button>

                                    </td>

                                </tr>
                            ))
                        }
                    </tbody>
                </table>
            </div>
        </div>
    )
}

export default ShowProducts