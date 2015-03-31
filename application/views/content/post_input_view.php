              <form method="post" action = "<?php echo base_url('post/sendpost');?>">
              <input type="text" class="form-control" id="judul" placeholder="Judul">
              <div class='box'>              
                <div class='box-body pad'>
                    <textarea class="textarea" placeholder="Place cursor here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    <div class="form-group">
                      <label>Category</label>
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Submit</button>
              </div>
              </form>