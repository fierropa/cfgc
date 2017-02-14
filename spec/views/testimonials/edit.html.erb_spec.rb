require 'rails_helper'

RSpec.describe "testimonials/edit", type: :view do
  before(:each) do
    @testimonial = assign(:testimonial, Testimonial.create!(
      :content => "MyText",
      :title => "MyString"
    ))
  end

  it "renders the edit testimonial form" do
    render

    assert_select "form[action=?][method=?]", testimonial_path(@testimonial), "post" do

      assert_select "textarea#testimonial_content[name=?]", "testimonial[content]"

      assert_select "input#testimonial_title[name=?]", "testimonial[title]"
    end
  end
end
