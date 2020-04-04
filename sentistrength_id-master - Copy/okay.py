from flask import Flask, redirect, url_for, request

app = Flask(__name__)

@app.route('/mayah')
def kuts():
    return redirect("http://www.google.com")
    ##buang_coma()

   
if __name__ == '__main__':
   app.run(debug = True)
