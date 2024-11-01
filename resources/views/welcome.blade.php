<!DOCTYPE html>
<html lang="en">
        <head>
            <title>Project Laravel</title>
            <script src="https://unpkg.com/react/umd/react.development.js"></script>
            <script src="https://unpkg.com/react-dom/umd/react-dom.development.js"></script>
            <script src="https://unpkg.com/@babel/standalone/babel.js"></script>
            <script src="https://cdn.tailwindcss.com"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
            <style>
                body {
                    font-family: 'Inter', sans-serif;
                }
            </style>
        </head>
        <body>
            <div id="root"></div>
            <script type="text/babel">
                const App = () => {
                    return (
                        <div className="min-h-screen flex flex-col">
                            <header className="flex justify-between items-center p-6">
                                <div className="flex items-center space-x-2">
                                    <div className="w-6 h-6 bg-pink-500 rounded-full"></div>
                                    <div className="w-6 h-6 bg-black rounded-full"></div>
                                </div>
                                <nav className="flex space-x-8">
                                    <a href="#" className="text-pink-500">About</a>
                                    <a href="{{ route('products.index') }}" className="text-gray-700">Products</a>
                                    <a href="{{ route('categories.index')}}" className="text-gray-700">Category</a>
                                    <a href="#" className="text-gray-700">Coming soon</a>
                                </nav>
                                <div className="flex space-x-4">
                                    <button className="px-4 py-2 border border-black rounded">Sign up</button>
                                    <button className="px-4 py-2 bg-black text-white rounded">Log in</button>
                                </div>
                            </header>
                            <main className="flex flex-1 items-center justify-between px-6">
                                <div className="max-w-lg">
                                    <h1 className="text-6xl font-bold leading-tight">INVENTORY MANAGEMENT</h1>
                                    <p className="mt-4 text-gray-600">Dibuat oleh <b>Zainul Mutawakkil</b> (23EO10003) yang didedikasikan untuk Mata Kuliah RPL (Rekayasa Perangkat Lunak) di Universitas Nahdatul Ulama Al-Ghazali Cilacap.</p>
                                    <button className="mt-8 px-8 py-4 bg-gradient-to-r from-pink-500 to-orange-500 text-white text-lg font-semibold rounded-full shadow-lg">Get Started</button>
                                </div>
                                <div className="relative">
                                    <img src="https://unugha.ac.id/wp-content/uploads/2020/07/kampus-unugha-600x450.jpg" alt="Unugha" className="w-full h-auto rounded-lg shadow-lg"/>
                                </div>
                            </main>
                        </div>
                    );
                };

                ReactDOM.render(<App />, document.getElementById('root'));
            </script>
        </body>
</html>
