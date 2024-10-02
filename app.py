from flask import Flask, render_template, redirect, request

app = Flask(__name__)

@app.route('/', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        service = request.form.get('service')
        if service == 'neuro-tv':
            return redirect('/neuro-tv')
        elif service == 'neuro-radio':
            return redirect('/neuro-radio')
    return render_template('index.html')

@app.route('/neuro-tv')
def neuro_tv():
    return "Welcome to Neuro TV!"

@app.route('/neuro-radio')
def neuro_radio():
    return "Welcome to Neuro Radio!"

if __name__ == '__main__':
    app.run(debug=True)